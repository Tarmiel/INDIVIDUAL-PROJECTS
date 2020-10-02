from django.urls import path
from . import views

urlpatterns = [
    path('',views.taskList, name='taskList'),
    path('task/<int:id>',views.taskView, name="taskView"),
    path('newTask',views.newTask,name="newTask"),
    path('deleteTask/<int:id>',views.deleteTask,name="deleteTask"),
    path('editTask/<int:id>',views.editTask,name="editTask")
]
