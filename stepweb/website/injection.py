from .forms import EmailFormulier

def inject_form(request):
    return {'emailform': EmailFormulier()}