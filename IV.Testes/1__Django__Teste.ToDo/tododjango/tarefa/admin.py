from django.contrib import admin
from .models import TarefaDb
# Register your models here.
@admin.register(TarefaDb)
class TarefaAdm(admin.ModelAdmin):
    list_display=['id','conteudo','data']