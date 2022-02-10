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
    description = models.TextField(blank=True)
    email = models.EmailField(blank=True)
    img = models.ImageField(storage=fpeople, blank=True)
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

class Aanmeldingen(models.Model):
    # created_at = models.DateTimeField(auto_now_add=True)
    naam = models.CharField(max_length=20)
    achternaam = models.CharField(max_length=30)
    geboortejaar = models.IntegerField()
    woonplaats = models.CharField(max_length=40)
    voorkeursinstrument = models.CharField(
        max_length=32, 
        choices = [('viool1', 'Eerste viool'), ('viool2', 'Tweede viool'), ('alt', 'Altviool'), 
        ('cello', 'Cello'), ('bas', 'Contrabas'), ('fluit', 'Dwarsfluit'), ('hobo', 'Hobo'), ('klarinet', 'Klarinet'),
        ('fagot', 'Fagot'), ('trompet', 'Trompet'), ('hoorn', 'Hoorn'), ('trommels', 'Slagwerk'), ('piano', 'Piano')])
    toelichting_instrument = models.TextField(blank=True)
    speelduur = models.IntegerField()
    orkesten = models.TextField()
    aanwezigheid_repetities = models.BooleanField()
    repetitie_toelichting = models.TextField(blank=True)
    e_mail = models.EmailField()
    telefoon = models.CharField(max_length=14)
    gevonden = models.CharField(
        max_length=32, 
        choices = [('viavia', 'Via via'), ('socials', 'Via social media'), ('anderorkest', 'Via een ander orkest'), ('anders', 'Overige')]
    )
    studie_werk = models.TextField()
    opmerkingen = models.TextField(blank=True)

    def __str__(self):
        return f"{self.naam} {self.achternaam}"

class Media(models.Model):
    label = models.TextField(primary_key=True)
    url = models.URLField(blank=True)
    iframe = models.TextField(blank=True)
    video = models.BooleanField(default=False)

    def ___str__(self):
        return self.label

class EmailListMember(models.Model):
    email = models.EmailField()

    def __str__(self):
        return self.email
    

class Meedoentekst(models.Model): 
    tekst1 = models.TextField()
    knop1_tekst = models.CharField(max_length=50)
    knop1_url = models.CharField(max_length=50)
    knop2_tekst = models.CharField(max_length=50)
    knop2_url = models.CharField(max_length=50)
    tekst2_kop = models.CharField(max_length=50)
    tekst2 = models.TextField()

    def __str__(self) -> str:
        return 'Meedoen'
