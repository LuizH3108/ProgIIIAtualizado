<section>
   <header class="page-header">
      <div class="row">
         <div class="col-md-9" style="font-size: 30px; font-weight:bold;">
            Lista de Categorias
         </div>
         <div class="col-md-3" style="text-align: right;">
            <a class="btn btn-primary" onclick="inserir()"><i class="glyphicon glyphicon-plus"></i> Adicionar</a>
            <a class="btn btn-default" onclick="listar2()"><i class="glyphicon glyphicon-refresh"></i> Atualizar</a>
         </div>
      </div>
   </header>

   <div class="table-responsive" id="data"></div>

   <div id="loader">
      <img src="../images/load.gif"/>
      Aguarde...
   </div>

   <!-- Trigger the modal with a button -->


   <!-- Modal -->
   <div id="myModal" class="modal" role="dialog">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title" id="myModalTitle">Informações da Categoria</h4>
         </div>
         <div class="modal-body">
            <form>
               <input type="hidden" id="txtId" />
               <label>Descrição:</label><br/>
               <input type="text" id="txtDescricao" size="30" class="form-control" maxlength="50"
                      placeholder="Descrição" required="true"/><br/>
               <label>Icone:</label><br/>
               <input type="text" id="txtIcone" size="30" class="form-control" maxlength="50"
                   placeholder="Icone" required="true"/><br/>
            </form>
         </div>

         <div class="alert alert-danger" role="alert" id="myModalMsg" hidden="hidden"></div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" onclick="gravar()"><i class="glyphicon glyphicon-ok"></i> Gravar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancelar</button>
         </div>
       </div>

     </div>
   </div>


   <script>
      document.onready = listar2();

      function ajax(url, params, callback){
         var xmlhttp;
         if (window.XMLHttpRequest) {
             xmlhttp = new XMLHttpRequest();
          } else {
             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
         xmlhttp.onreadystatechange = callback;
         xmlhttp.open("POST", url, true);
         xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xmlhttp.send(params);
         return xmlhttp;
      }

      function listar2(str) {
         document.getElementById("loader").style.display = "block";
         document.getElementById("data").style.display = "none";
        var call = ajax("logic/categoria/listar.php", "busca="+str, function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data").innerHTML = this.responseText;
                document.getElementById("loader").style.display = "none";
                document.getElementById("data").style.display = "block";
            }
        });
      }

      function listar(str) {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data").innerHTML = this.responseText;
            }
         };
         xmlhttp.open("POST", "logic/categoria/listar.php", true);
         xmlhttp.send();
      }

      function inserir(){
         $('#myModal').modal('show');
         $('#myModalTitle').text("Inserir categoria");
         $('#txtDescricao').val("");
         $('#txtIcone').val("");
      }

      function alterar(id){
         var call = ajax("logic/categoria/recuperar.php", "id="+id, function() {
             if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
                 obj = JSON.parse(this.responseText);
                 $('#myModal').modal('show');
                 $('#myModalTitle').text("Alterar categoria");
                 $('#txtId').val(obj.id);
                 $('#txtDescricao').val(obj.descricao);
                 $('#txtIcone').val(obj.icone);
             }
         });
      }

      function remover(id){
         alert(id);
      }

      function gravar(){
         var id = $('#txtId').val();
         var descricao = $('#txtDescricao').val();
         var icone = $('#txtIcone').val();
         var params = "descricao="+descricao+"&icone="+icone;
         if (id != ""){
            params = params + "&id="+id;
         }
         var call = ajax("logic/categoria/processar.php", params, function() {
             if (this.readyState == 4 && this.status == 200) {
                 var response = this.responseText;
                 var responses = response.split(";");
                 if (responses[0] == "1"){
                    $('#myModal').modal('hide');
                    listar2();
                 } else {
                    $('#myModalMsg').text(responses[1]);
                 }
             }
         });
      }
   </script>
</section>
