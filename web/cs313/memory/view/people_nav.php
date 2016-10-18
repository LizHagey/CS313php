        <nav>
            <ul class="nav">
                <!-- display links for all categories -->
                <?php foreach($people as $people) : ?>
                <li>
                    <a href="?people_id=<?php 
                              echo $people['peopleID']; ?>">
                        <?php echo $people['peopleName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>

