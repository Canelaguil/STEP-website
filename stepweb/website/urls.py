from django.urls import path

from . import views

urlpatterns = [
    path('', views.index, name='cstr'),
    path('home', views.index, name='index'),
    path('mensen', views.people, name='people'),
    path('muziek', views.music, name='music'),
    path('meedoen', views.join, name='join'),
    path('aanmelden', views.form, name='form'),
    path('doneer', views.donate, name='donate'),
    path('documenten', views.docs, name='docs'),
]