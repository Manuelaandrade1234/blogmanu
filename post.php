<?php
   include_once("templetes/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentpost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentpost = $post;
            }
        }
    }   

?>
 <main id="post-container">
    <div id="content-container">
        <h1 id="main-title"><?= $currentpost['title']?></h1>
        <p id="post-description"><?= $currentpost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentpost['img'] ?>" alt="<?= $currentpost['title']?>">
        </div>
        <p class="post-container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi qui voluptate modi unde et, repudiandae voluptatibus neque, vero adipisci saepe eos tenetur repellat! Eligendi beatae minus quibusdam, delectus dolores corrupti!
        Beatae doloribus inventore ad quos eaque assumenda distinctio soluta, quaerat, vel repudiandae unde aut necessitatibus, obcaecati quasi! Consequatur molestias voluptates autem porro cumque veniam, libero placeat quidem quas sapiente est!
        Et doloremque assumenda voluptates ducimus, odit omnis, fugit voluptatibus alias, mollitia dolore obcaecati ipsum asperiores sapiente quaerat placeat laboriosam. Nemo libero aliquid autem voluptas minima consequuntur eaque cum architecto earum!
        Voluptatum dicta libero quaerat obcaecati doloribus? Voluptatibus esse dicta qui blanditiis culpa, hic dolor temporibus veniam nesciunt eum. Voluptates, non facere iusto exercitationem quidem labore nobis eveniet ipsum corporis amet.
        Officia eveniet, quam ducimus odio facere dolorem voluptates ipsum autem quis. Animi accusantium itaque temporibus mollitia recusandae odit tempora deleniti. Quibusdam temporibus doloribus quod dolorum non dignissimos debitis deserunt iste?</p>
        <p class="post-container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi qui voluptate modi unde et, repudiandae voluptatibus neque, vero adipisci saepe eos tenetur repellat! Eligendi beatae minus quibusdam, delectus dolores corrupti!
        Beatae doloribus inventore ad quos eaque assumenda distinctio soluta, quaerat, vel repudiandae unde aut necessitatibus, obcaecati quasi! Consequatur molestias voluptates autem porro cumque veniam, libero placeat quidem quas sapiente est!
        Et doloremque assumenda voluptates ducimus, odit omnis, fugit voluptatibus alias, mollitia dolore obcaecati ipsum asperiores sapiente quaerat placeat laboriosam. Nemo libero aliquid autem voluptas minima consequuntur eaque cum architecto earum!
        Voluptatum dicta libero quaerat obcaecati doloribus? Voluptatibus esse dicta qui blanditiis culpa, hic dolor temporibus veniam nesciunt eum. Voluptates, non facere iusto exercitationem quidem labore nobis eveniet ipsum corporis amet.
        Officia eveniet, quam ducimus odio facere dolorem voluptates ipsum autem quis. Animi accusantium itaque temporibus mollitia recusandae odit tempora deleniti. Quibusdam temporibus doloribus quod dolorum non dignissimos debitis deserunt iste?</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-titles">Tags</h3>
        <ul id="tags-list">
            <?php foreach($currentpost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-titles"> Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
 </main>
<?php
   include_once("templetes/footer.php")
?>