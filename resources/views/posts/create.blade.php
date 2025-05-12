<x-layouts.app :title="('Create New Pos t')">
    <!-- membuat form -->

   <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <flux:input
            name="title"
            label="Title"
            type="text"
            class="mb-3"
            placeholder="Enter post title" required/>
        
        <flux:textarea
            name="content"
            label="Content"
            type ="text"
            class="mb-3"
            placeholder="Enter post content" required>

        <flux:input
            name="image"
            label="Image"
            class="mb-3"
            type="file" accept="image/*" required/>


        <flux:button type="submit" variant="primary">
            save
        </flux:button>
    </form>
    </x-layouts.app>