# Generated by Django 3.1.4 on 2021-07-05 09:05

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('website', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Boardmember',
            fields=[
                ('function', models.TextField(primary_key=True, serialize=False)),
                ('name', models.TextField()),
                ('description', models.TextField()),
                ('email', models.EmailField(max_length=254)),
                ('img', models.ImageField(upload_to='')),
                ('url1', models.URLField(blank=True)),
                ('label1', models.TextField(blank=True)),
                ('url2', models.URLField(blank=True)),
                ('label2', models.TextField(blank=True)),
            ],
        ),
        migrations.DeleteModel(
            name='Board',
        ),
    ]