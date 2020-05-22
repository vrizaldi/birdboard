<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.css" integrity="sha256-8BrtNNtStED9syS9F+xXeP815KGv6ELiCfJFQmGi1Bg=" crossorigin="anonymous" />
</head>
<body>
    <form method="POST" action="/projects" class="container" style="padding-top: 40px">
        <h1 class="heading is-1">Create a Project</h1>

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" name="title" class="input" placeholder="Title">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="input" placeholder="Description">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
    </form>
</body>
</html>
