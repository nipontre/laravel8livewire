<div>
    <div class="mt-5 row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h1>Posts List</h1>
                    <button type="button" class="float-right btn btn-primary btn-sm" data-toggle="modal" data-target="#detailModel">
                        Create Post
                    </button>
                    <table class="table">
                        <thead>
                            <tr class="text-gray-800 border border-b-0">
                                <th class="px-4 py-3">
                                    Title
                                </th>
                                <th class="px-4 py-3">
                                    Author
                                </th>
                                <th class="px-4 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                        <tr class="w-full font-light text-gray-700 whitespace-no-wrap border border-b-0">
                            <td class="px-4 py-4">
                                {{ $post->title }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $post->user_id }}
                            </td>
                            <td class="px-4 py-4">
                                <button type="button" wire:click="edit({{ $post->id }})"  data-toggle="modal" data-target="#detailModel" class="btn btn-warning btn-sm">Edit</button>
                                <button type="button" wire:click="delete({{ $post->id }})"  class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



    @include('livewire.create-posts')
</div>

