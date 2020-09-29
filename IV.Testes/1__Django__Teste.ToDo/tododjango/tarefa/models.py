from django.db import models

# Create your models here.
class TarefaDb(models.Model):
        conteudo=models.CharField(max_length=200)
        data=models.DateTimeField(auto_now_add=True)

        def __str__(self): #retorna o id
            return str(self.id)