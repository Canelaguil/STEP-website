# Generated by Django 3.1.7 on 2022-02-10 15:49

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('website', '0013_emaillistmember'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='media',
            name='id',
        ),
        migrations.AlterField(
            model_name='media',
            name='label',
            field=models.TextField(primary_key=True, serialize=False),
        ),
    ]