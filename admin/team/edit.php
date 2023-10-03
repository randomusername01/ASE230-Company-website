<?php
if(count($_POST)>0){
    $output='';
    $fp=fopen('../../data/teams.csv','r');
    $index=0;
    while(!feof($fp)){
        $line=fgets($fp);
        if($index==$_GET['index']){
            // modify line
            $output.=$_POST['name'].','.$_POST['title'].','.$_POST['description'].',images/team/'.$_FILES['image']['name'].','.PHP_EOL;
        }else{
            // put the line into $output
            $output.=$line;
        }
        $index++;
    }
    fclose($fp);
    $fp=fopen('../../data/teams.csv','w');
    fputs($fp,$output);
    fclose($fp);
    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/../../images/team/'.$_FILES['image']['name']);
    header('location: index.php');
}
$fp=fopen('../../data/teams.csv','r');
?>
    <a href="index.php">Back</a><br><br>
<?php
$index=0;
while(!feof($fp)){
    $line=trim(fgets($fp));
    if($_GET['index']==$index){
        if(strlen($line)>0){
            $line=explode(',',$line);

            // recombine description
            array_pop($line);
            $desc = "";
            for ($i = 2; $i < count($line) - 1; $i++) {
                $desc = $desc.$line[$i];
            }
            $line_fixed = array();
            array_push($line_fixed, $line[0], $line[1], $desc, end($line));
            $line = $line_fixed;
            ?>

            <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?index=<?= $_GET['index'] ?>" enctype="multipart/form-data">
                <div>
                    <label>Name</label><br>
                    <input type="text" name="name" value="<?= $line[0] ?>"  />
                </div><br>
                <div>
                    <label>Title</label><br>
                    <input type="text" name="title" value="<?= $line[1] ?>" />
                </div><br>
                <div>
                    <label>Description</label><br>
                    <textarea name="description" cols="30" rows="10"><?= $line[2] ?></textarea>
                </div><br>
                <div>
                    <label>Update Profile Picture</label><br>
                    <input type="file" name="image" />
                </div><br><br>
                <button type="submit">Save Changes</button>
            </form>
            <?php
        }
        break;
    }
    $index++;
}
fclose($fp);