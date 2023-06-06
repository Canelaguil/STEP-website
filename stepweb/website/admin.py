from django.contrib import admin

from .models import Boardmember, Creative, CommitteeMember, Home, Meedoentekst, Project, Media, EmailListMember, Aanmeldingen

admin.site.register(Home)
admin.site.register(Boardmember)
admin.site.register(Creative)
admin.site.register(CommitteeMember)
admin.site.register(Project)
admin.site.register(Media)
admin.site.register(EmailListMember)
admin.site.register(Meedoentekst)
