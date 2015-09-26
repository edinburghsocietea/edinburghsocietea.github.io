---
layout: default
---

{% for post in site.posts %}
  {{ post.url }}
  {% include post.html %}
{% endfor %}