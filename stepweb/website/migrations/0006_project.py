# Generated by Django 3.1.4 on 2021-07-08 18:18

import django.core.files.storage
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('website', '0005_home'),
    ]

    operations = [
        migrations.CreateModel(
            name='Project',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titel', models.TextField()),
                ('img', models.ImageField(blank=True, storage=django.core.files.storage.FileSystemStorage(location='adminuploads'), upload_to='')),
                ('what', models.TextField()),
                ('where', models.TextField()),
                ('when', models.TextField()),
                ('solist', models.TextField(blank=True)),
                ('dirigent', models.TextField(blank=True)),
                ('description', models.TextField()),
                ('url1', models.URLField(blank=True)),
                ('label1', models.TextField(blank=True)),
                ('url2', models.URLField(blank=True)),
                ('label2', models.TextField(blank=True)),
                ('url3', models.URLField(blank=True)),
                ('label3', models.TextField(blank=True)),
            ],
        ),
    ]
