# Generated by Django 3.1.4 on 2021-07-09 16:12

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('website', '0008_project_alt'),
    ]

    operations = [
        migrations.AddField(
            model_name='project',
            name='order',
            field=models.IntegerField(blank=True, default=1),
        ),
    ]