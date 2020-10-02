from django.db import models

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
    
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    # nome do titulo no django admin
    def __str__(self):
        return self.title