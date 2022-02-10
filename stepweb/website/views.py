# from socket import AF_AAL5
from django.shortcuts import render
from .models import Boardmember, Creative, CommitteeMember, Home, Meedoentekst, Project, Media
from .forms import AanmeldFormulier

def people(request): 
    bestuur = Boardmember.objects.order_by('order')
    creatives = Creative.objects.order_by('order')
    committee = CommitteeMember.objects.order_by()
    cntxt = {
        'bestuur' : bestuur,
        'creatives' : creatives, 
        'committee' : committee
    }
    return render(request, 'website/people.html', cntxt)

def music(request):
    mainprojects = Project.objects.filter(mainproject=True)
    sideprojects = Project.objects.filter(mainproject=False)
    cntxt = {
        'main' : mainprojects, 
        'side' : sideprojects
    }
    return render(request, 'website/music.html', cntxt)

def join(request):
    h = Meedoentekst.objects.first()
    cntxt = {
        'h' : h
    }
    return render(request, 'website/join.html', cntxt)

def form(request):
    if request.method == 'POST': 
        form = AanmeldFormulier(request.POST)
        form.save()
        return render(request, 'website/succes.html')
        # else:
        #     print('form not valid')
        #     return render(request, 'website/construction.html')
    form = AanmeldFormulier()
    print(form['voorkeursinstrument'][1])
    cntxt = {'form' : form}
    print(form['voorkeursinstrument'][1])
    return render(request, 'website/form.html', cntxt)

def media(request): 
    videos = Media.objects.filter(video=True)
    urls = Media.objects.filter(video=False)
    cntxt = {
        'urls' : urls, 
        'videos' : videos
    }
    return render(request, 'website/media.html', cntxt)
def donate(request):
    cntxt = {}
    return render(request, 'website/donate.html', cntxt)

def docs(request):
    cntxt = {}
    return render(request, 'website/docs.html', cntxt)

def construction(request):
    cntxt = {}
    return render(request, 'website/construction.html', cntxt)

def index(request): 
    h = Home.objects.first()
    cntxt = {
        'h' : h
    }
    return render(request, 'website/home.html', cntxt)