from django import template
from django.conf import settings

register = template.Library()

@register.filter('addstr')
def addstr(arg1, arg2):
    """concatenate arg1 & arg2"""
    return str(arg1) + str(arg2)

@register.simple_tag
def settings_value(name):
    return getattr(settings, name, "")