from django.contrib import admin

from .models import Boardmember, Creative, CommitteeMember, Home, Project

admin.site.register(Boardmember)
admin.site.register(Creative)
admin.site.register(CommitteeMember)
admin.site.register(Home)
admin.site.register(Project)
