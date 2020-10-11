from django.urls import path
from .views import HomeView, ArticleDetailView, AddPostView, UpdatePostView,DeletePostView

urlpatterns = [
    path('',HomeView.as_view(), name='home'),
    path('article/<int:pk>',ArticleDetailView.as_view(), name='article'),
    path('add_post/',AddPostView.as_view(), name='add_post'),
    path('edit_post/<int:pk>',UpdatePostView.as_view() ,name="edit_post"),
    path('delete_post/<int:pk>/remove',DeletePostView.as_view(),name="delete_post"),
]