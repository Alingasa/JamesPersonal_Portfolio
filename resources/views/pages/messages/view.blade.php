
    <div class="modal fade" id="editViewModal{{$messages->id}}" tabindex="-1" aria-labelledby="editInterestModalLabel{{$messages->id}}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel{{$messages->id}}">Name: {{$messages->name}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">  
                    <div class="text mb-3">
                        <p class="text-danger">Purpose:</p>
                        <p>{{$messages->subject}}</p>
                    </div>    
                    <div class="text mb-3">
                        <label for="description" class="form-label"><strong>Message</strong></label>
                        <textarea class="form-control" readonly name="message" rows="4">{{$messages->message}}</textarea>
                    </div>   
                </div>
                <div class="modal-footer">
                  <form action="{{route('messages.destroy', $messages->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i> <!-- Font Awesome trash icon -->
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>

