# Generated by Django 3.1.7 on 2022-02-10 17:19

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('website', '0018_auto_20220210_1716'),
    ]

    operations = [
        migrations.AlterField(
            model_name='aanmeldingen',
            name='opmerkingen',
            field=models.TextField(blank=True),
        ),
    ]
