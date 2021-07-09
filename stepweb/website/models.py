from django.db import models
from django.core.files.storage import FileSystemStorage
# from pillow import Image

fpeople = FileSystemStorage(location='adminuploads')

class Boardmember(models.Model):
    function = models.TextField(primary_key=True)
    name = models.TextField()
    description = models.TextField()
    email = models.EmailField()
    img = models.ImageField(storage=fpeople)
    order = models.IntegerField(blank=True, default=1)
    url1 = models.URLField(blank=True)
    label1 = models.TextField(blank=True)
    url2 = models.URLField(blank=True)
    label2 = models.TextField(blank=True)

    def __str__(self):
        return self.name

class Creative(models.Model):
    function = models.TextField(primary_key=True)
    name = models.TextField()
    description = models.TextField()
    email = models.EmailField()
    img = models.ImageField(storage=fpeople)
    order = models.IntegerField(blank=True, default=1)
    url1 = models.URLField(blank=True)
    label1 = models.TextField(blank=True)
    url2 = models.URLField(blank=True)
    label2 = models.TextField(blank=True)

    def __str__(self):
        return self.name
    
class CommitteeMember(models.Model):
    name = models.TextField(primary_key=True)
    description = models.TextField()

    def __str__(self):
        return self.name

class Home(models.Model):
    heading = models.TextField(primary_key=True)
    subheading = models.TextField()
    btntext = models.TextField()
    btnurl = models.TextField()

    def __str__(self):
        return self.heading


    # cntxt = {'bestuur' : {
    #     'Penningmeester': {
    #         'name' : 'Tessa Heeroma',
    #         'txt' : 'Tessa Heeroma (1996) speelt al vanaf jonge leeftijd viool en altviool in verschillende amateurorkesten en -ensembles, waaronder het Haarlems Barok Jeugdorkest, het VU-Orkest en het strijkkwartet Puutavaaran Harjoittajat. Recentelijk is ze ook begonnen te experimenteren met het spelen van de ud, de Midden-Oosterse luit. Daarnaast studeerde ze Klassieke Talen en Arabisch aan de UvA. Tessa is penningmeester van STEP.',
    #         'mail' : 'penningmeester@ensembleproject.nl',

    #     }
    # }}

class Project(models.Model):
    titel = models.TextField()
    alt = models.TextField(blank=True)
    img = models.ImageField(blank=True, storage=fpeople)
    what = models.TextField()
    where = models.TextField()
    when = models.TextField()
    active = models.BooleanField(default=False)
    mainproject = models.BooleanField(default=True)
    order = models.IntegerField(default=1, blank=True)
    solist = models.TextField(blank=True)
    dirigent = models.TextField(blank=True)
    description = models.TextField()
    url1 = models.URLField(blank=True)
    label1 = models.TextField(blank=True)
    url2 = models.URLField(blank=True)
    label2 = models.TextField(blank=True)
    url3 = models.URLField(blank=True)
    label3 = models.TextField(blank=True)
    url3 = models.URLField(blank=True)
    label3 = models.TextField(blank=True)

    def __str__(self):
        return self.titel
