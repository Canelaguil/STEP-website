# Generated by Django 3.1.7 on 2022-02-10 12:56

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('website', '0009_project_order'),
    ]

    operations = [
        migrations.CreateModel(
            name='Aanmeldingen',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('naam', models.CharField(max_length=20)),
                ('achternaam', models.CharField(max_length=30)),
                ('geboortejaar', models.IntegerField()),
                ('woonplaats', models.CharField(max_length=40)),
                ('voorkeursinstrument', models.CharField(choices=[('viool1', 'Eerste viool'), ('viool2', 'Tweede viool'), ('alt', 'Altviool'), ('cello', 'Cello'), ('bas', 'Contrabas'), ('fluit', 'Dwarsfluit'), ('hobo', 'Hobo'), ('klarinet', 'Klarinet'), ('fagot', 'Fagot'), ('trompet', 'Trompet'), ('hoorn', 'Hoorn'), ('trommels', 'Slagwerk'), ('piano', 'Piano')], max_length=32)),
                ('toelichting_instrument', models.TextField()),
                ('speelduur', models.IntegerField()),
                ('orkesten', models.TextField()),
                ('aanwezigheid_repetities', models.BooleanField()),
                ('repetitie_toelichting', models.TextField()),
                ('e_mail', models.EmailField(max_length=254)),
                ('telefoon', models.CharField(max_length=14)),
                ('gevonden', models.CharField(choices=[('viavia', 'Via via'), ('socials', 'Via social media'), ('anderorkest', 'Via een ander orkest'), ('anders', 'Overige')], max_length=32)),
                ('studie_werk', models.TextField()),
                ('opmerkingen', models.TextField()),
            ],
        ),
    ]