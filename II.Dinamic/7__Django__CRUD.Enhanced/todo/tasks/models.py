from django.db import models
from django.contrib.auth import get_user_model
# Create your models here.
class Task(models.Model):

    STATUS = (
        ('doing','Fazendo'),
        ('done','Encerrado')
    )

    title = models.CharField(max_length=255)
    description = models.TextField()
    done = models.CharField(
        max_length=7,
        choices=STATUS,
    )
    user = models.ForeignKey(get_user_model(),on_delete=models.CASCADE)
    
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    # nome do titulo no django admin
    def __str__(self):
        return self.title