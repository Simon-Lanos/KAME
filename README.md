#KAME

### Initialisation du projet

Récupérer les dépendances
```bash
composer install
```

### Créer un template twig

Passez votre contenu html dans le block body :
```
{% block body %}

...votre contenu...

{% endblock %}
```

Vous devez omettre les balises classiques html, head...

Pour ajouter du CSS perso vous devez faire vos lien dans le block stylesheets suivie de parent() :
```
{% stylesheets body %}
 
...vos balise <link>...
{{ parent() }}

{% endblock %}
```

Pour ajouter du JS perso vous devez faire vos lien dans le block javascripts :
```
{% javascripts body %}
 
...votre contenu...

{% endblock %}
```

### Les mail de reset password

Si le lien dans le mail ne fonctionne pas, 
regardez si votre serveur intégré tourne bien sur le port 8000.