<!-- resources/views/contributor-form.blade.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Add Contributor - NoteNest</title>
</head>

@if(session('success'))
    <div style="color: green; margin-bottom: 15px;">
        {{ session('success') }}
    </div>
@endif

<body style="padding:40px;font-family:sans-serif">
  <h1>Add New Contributor</h1>

  <form method="POST" action="/store-contributors">
    @csrf

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Subject:</label><br>
    <input type="text" name="subject" required><br><br>

    <label>Note Name:</label><br>
    <input type="text" name="note_name" required><br><br>

    <label>Instagram ID (optional):</label><br>
    <input type="text" name="instagram_id" placeholder="e.g. adityaranacode"><br><br>

    <button type="submit">Add Contributor</button>
  </form>
</body>
</html>
