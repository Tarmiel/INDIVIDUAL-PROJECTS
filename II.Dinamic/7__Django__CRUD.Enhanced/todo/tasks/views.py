from django.shortcuts import render, get_object_or_404, redirect
from django.contrib.auth.decorators import login_required
from django.core.paginator import Paginator
from django.http import HttpResponse
from .forms import TaskForm
from django.contrib import messages

from .models import Task
# Create your views here.

# Teste
def error_404_view(request,exception):
    return render(request,'404.html')
def error_500_view(request):
    return render(request,'404.html')

# LISTANDO AS TAREFAS
@login_required
def taskList(request):
    # Search
    # Gambiarra!?
    global variable
    search = request.GET.get('search')
    variable = search

    if search:
        # tasks = Task.objects.filter(title__icontains=search).order_by('-created_at')
        tasks = Task.objects.filter(title=search, user=request.user).order_by('-created_at') #exato

    else:
        # Paginação / Exbição
        tasks_list = Task.objects.all().order_by('-created_at').filter( user=request.user)
        paginator = Paginator(tasks_list,3)
        page = request.GET.get('page')
        tasks = paginator.get_page(page)

    return render(request,'tasks/list.html',{'tasks':tasks})

# VISUALIZANDO AS TAREFAS
@login_required
def taskView(request,id):
    task = get_object_or_404(Task,pk=id,user=request.user)
    return render(request,'tasks/taskview.html',{'task':task})

# ADICIONANDO NOVA TAREFA
@login_required
def newTask(request):
    if request.method == 'POST':
        form = TaskForm(request.POST)

        if form.is_valid():
            task = form.save(commit=False)
            task.done = 'doing'
            task.user = request.user
            task.save()
            return redirect('/')
    else:
        form = TaskForm()
        return render(request,'tasks/newTask.html',{'form':form})

# EDITANDO A TAREFA
@login_required
def editTask(request,id):
    task = get_object_or_404(Task, pk=id)
    form = TaskForm(instance=task)

    if request.method == 'POST':
        form = TaskForm(request.POST, instance=task)

        if form.is_valid():
            task.save()
            return redirect('/')
        else:
            return render(request,'tasks/editTask.html',{'form':form,'task':task})
    else:
        return render(request,'tasks/editTask.html',{'form':form,'task':task})

# DELETANDO A TAREFA
@login_required
def deleteTask(request,id):
    task = get_object_or_404(Task, pk=id)
    task.delete()
    messages.info(request,f'Tarefa {task.title} deletada com sucesso.')
    
    tasks_control = Task.objects.filter(title=task.title)

    if variable:
        if len(tasks_control) > 0:
            return redirect(f'/?search={task.title}')
        else:
            return redirect ('/')
    else:
        return redirect ('/')
