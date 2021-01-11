from django.contrib import admin

from testapp.models import student
# Register your models here.
class studentAdmin(admin.ModelAdmin):
	list_diplay=['studentname','studentage','username','password','studentaddress']
admin.site.register(student,studentAdmin)