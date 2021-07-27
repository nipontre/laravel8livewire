<!-- Modal -->
<div wire:ignore.self class="modal fade" id="detailModel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Model</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control"  name="title" wire:model='title' id="title" aria-describedby="help-title" >
                      @error('title')<span class="text-red-500"></span>@enderror
                    </div>

                    <div class="form-group">
                      <label for="description">Content</label>
                      <textarea class="form-control"  name="description" wire:model='description' id="description" rows="3"></textarea>
                      @error('description')<span class="text-red-500"></span>@enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click='clearForm()' data-dismiss="modal" class="btn btn-secondary">Close</button>
                    <button  type="button" wire:click.prevent='store()' data-dismiss="modal" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


