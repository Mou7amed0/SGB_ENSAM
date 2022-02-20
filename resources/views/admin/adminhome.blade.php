<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
      <div class="container-scroller">
    @include("admin.navbar")
        <main>
            <div class="books card">
                Nombre de livres: {{ count($books) }}
            </div>
            <div class="categories card">
                Nombre de catégorie: {{ count($categories)}}
            </div>
            <div class="etudiants card">
                Nombre d'étudiants: {{ count($etudiants) }}
            </div>
            <div class="copies card">
                Nombre de copies: {{ count($copies) }}
            </div>
            <div class="suggestions card">
                Nombre de suggestions: {{ count($suggestions) }}
            </div>
        </main>
    </div>
    @include("admin.adminscript")
  </body>
</html>
