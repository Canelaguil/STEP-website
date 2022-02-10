from django.forms import EmailField, ModelForm, ModelChoiceField
from .models import Aanmeldingen, EmailListMember

class AanmeldFormulier(ModelForm):
    # gevonden = ModelChoiceField(gevonden.objects.all(), empty_label='Gevonden')

    class Meta:
        model = Aanmeldingen
        fields = '__all__'

    def __init__(self, *args, **kwargs):
        super(AanmeldFormulier, self).__init__(*args, **kwargs)
        self.fields['voorkeursinstrument'].empty_label = "Voorkeursinstrument"
        # following line needed to refresh widget copy of choice list
        self.fields['voorkeursinstrument'].widget.choices = self.fields['voorkeursinstrument'].choices

class EmailFormulier(ModelForm):
    class Meta: 
        model = EmailListMember
        fields =  '__all__'