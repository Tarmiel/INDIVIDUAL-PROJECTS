from django.urls import path
from . import views

urlpatterns =[
    path('',views.home, name="home"),
    path('post/<int:pk>/',views.detalhe_post, name="detalhe_post"),
    path('post/new/',views.adicionar_postagem, name="adicionar_postagem"),
    path('post/edit/<int:pk>/',views.edit_postagem,name="edit_postagem"),
    path('post/delete/<int:pk>/',views.delete_post,name="delete_post")
]