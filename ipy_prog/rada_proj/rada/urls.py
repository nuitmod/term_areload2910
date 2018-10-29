from django.conf.urls import url, include
from . import views

#app_name = 'rada'

urlpatterns = [
    url(r'^$', views.index, name='index'),
#    url(r'^rada/', views.index, name='index'),
]
