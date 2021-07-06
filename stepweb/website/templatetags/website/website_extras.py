from django import template

register = template.Library()

@register.filter('addstr')
def addstr(arg1, arg2):
    """concatenate arg1 & arg2"""
    return str(arg1) + str(arg2)