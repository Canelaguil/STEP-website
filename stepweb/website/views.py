from django.shortcuts import render
from .models import Boardmember, Creative, CommitteeMember, Home, Project

# Create your views here.
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
    cntxt = {}
    return render(request, 'website/join.html', cntxt)

def form(request):
    cntxt = {}
    return render(request, 'website/form.html', cntxt)

def donate(request):
    cntxt = {}
    return render(request, 'website/donate.html', cntxt)

def docs(request):
    cntxt = {}
    return render(request, 'website/docs.html', cntxt)

def index(request): 
    h = Home.objects.first()
    cntxt = {
        'h' : h
    }
    return render(request, 'website/home.html', cntxt)