from django.shortcuts import render
from django.http import HttpResponse
from .models import Boardmember

# Create your views here.
def index(request): 
    bestuur = Boardmember.objects.order_by('order')
    cntxt = {
        'bestuur' : bestuur
    }
    return render(request, 'website/people.html', cntxt)