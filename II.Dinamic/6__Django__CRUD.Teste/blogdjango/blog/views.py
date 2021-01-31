from django.shortcuts import render
from blog.models import Postagem 
from .forms import PostForm
from django.utils import timezone
from django.shortcuts import redirect, get_object_or_404

# Create your views here.

def home(request):
    postagens = Postagem.objects.all().order_by("-data_criacao") 
                            #[0:1] ultimo, 0:2, os dois ultimos e sucessivamente
    postagens2 = Postagem.objects.last()
    # import pdb;pdb.set_trace()
    return render(request,'home.html',{'postagens':postagens})

def detalhe_post(request, pk):
    postagem = Postagem.objects.get(pk=pk)
    return render(request,'detalhe_postagem.html',{'postagem':postagem})

def adicionar_postagem(request):
    # Quando for para salvar
    if request.method == "POST":
        form = PostForm(request.POST)
        if form.is_valid():
            postagem = form.save(commit=False)
            postagem.Autor = request.user
            postagem.data_publicacao = timezone.now()
            postagem.save()
            return redirect('home')
    else: 
        # Primeiro acesso
        form = PostForm()
    return render(request,'editar_postagem.html',{'form':form})

def edit_postagem(request,pk):
    # Quando for para salvar
    postagem = get_object_or_404(Postagem,pk=pk)
    if request.method == "POST":
        form = PostForm(request.POST, instance=postagem)
        if form.is_valid():
            postagem = form.save(commit=False)
            postagem.Autor = request.user
            postagem.data_publicacao = timezone.now()
            postagem.save()
            return redirect('home')
    else: 
        # Primeiro acesso
        form = PostForm( instance=postagem)
    return render(request,'editar_postagem.html',{'form':form})

def delete_post(request,pk):
    postagem = Postagem.objects.get(pk=pk)
    postagem.delete()
    return redirect('home')