 {{-- STATUT --}}
 <div class="modal fade" id="editModal" tabindex="-1"
 aria-labelledby="exampleModalLabel"aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Editer le statut</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal"
                 aria-label="Close"></button>
         </div>
         <form class="form-group" action="/valider_reservation" method="POST">
             @csrf
             <input type="number" class="form-control" id="id" name="id"
                 style="display: none;">
             <div class="mb-3 row">

                 <div class="mb-3">
                     <label for="exampleInputPassword1" class="form-label">statut
                     </label><br>
                     <input type="radio" name="statut" value="Approuver">Approuver <br>
                     <input type="radio" name="statut" value="Rejeter">Rejeter
                 </div>
             </div>
             <div class="modal-footer">
                 <input type="button" class="btn btn-danger" data-bs-dismiss="modal"
                     value="fermer" />
                 <input type="submit" class="btn btn-primary" value="Editer" />
             </div>
         </form>
     </div>
 </div>
</div>
{{-- STATUT --}}