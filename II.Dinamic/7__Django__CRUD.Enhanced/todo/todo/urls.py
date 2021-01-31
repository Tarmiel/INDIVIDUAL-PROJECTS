from django.contrib import admin
from django.urls import path, include
from django.conf.urls import handler404, handler500

urlpatterns = [
    path('admin/', admin.site.urls),
    path('',include('tasks.urls')),
    path('accounts/',include('accounts.urls')),
    path('accounts/',include('django.contrib.auth.urls')),

]

handler404 = 'tasks.views.error_404_view'
handler500 = 'tasks.views.error_500_view'