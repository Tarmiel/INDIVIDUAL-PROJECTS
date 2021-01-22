from django import forms
from .models import TarefaDb

class ConteudoForm(forms.ModelForm):
    class Meta:
        model=TarefaDb
        fields=('conteudo',)