# Generated by Django 3.1.7 on 2022-02-10 16:37

from django.db import migrations, models
import django.utils.timezone


class Migration(migrations.Migration):

    dependencies = [
        ('website', '0016_meedoentekst'),
    ]

    operations = [
        migrations.AddField(
            model_name='aanmeldingen',
            name='created_at',
            field=models.DateTimeField(auto_now_add=True, default=django.utils.timezone.now),
            preserve_default=False,
        ),
    ]
