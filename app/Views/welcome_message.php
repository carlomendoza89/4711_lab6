<!doctype html>
<html>
	<head>
		<title>Welcome to Lab 6</title>

		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	</head>
	<body>

		<style {csp-style-nonce}>
			div.logo {
				opacity: 0.08;
				position: absolute;
				top: 2rem;
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
			}
			body {
				height: 100%;
				background: #fafafa;
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				color: #777;
				font-weight: 300;
			}
			h1 {
				font-weight: lighter;
				letter-spacing: 0.8rem;
				font-size: 3rem;
				margin-top: 145px;
				margin-bottom: 0;
				color: #222;
			}
			.wrap {
				max-width: 1024px;
				margin: 5rem auto;
				padding: 2rem;
				background: #fff;
				text-align: center;
				border: 1px solid #efefef;
				border-radius: 0.5rem;
				position: relative;
			}
			pre {
				white-space: normal;
				margin-top: 1.5rem;
			}
			code {
				background: #fafafa;
				border: 1px solid #efefef;
				padding: 0.5rem 1rem;
				border-radius: 5px;
				display: block;
			}
			p {
				margin-top: 1.5rem;
			}
			.footer {
				margin-top: 2rem;
				border-top: 1px solid #efefef;
				padding: 1em 2em 0 2em;
				font-size: 85%;
				color: #999;
			}
			a:active,
			a:link,
			a:visited {
				color: #dd4814;
			}
		</style>

		<div class="wrap">

			<h1>Welcome to Lab 6</h1>

<!--			<div class="logo">-->
<!--                <img src="boba.gif" title="boba"/>-->
<!--			</div>-->

		</div>

        <div id = "data">
            <li><a href="dwarfs">Dwarfs</a></li>
            <ol>
                <?php
                $db = \Config\Database::connect();
                // validation starts here
                $validation =  \Config\Services::validation();
                $query = $db->query('SELECT * FROM dwarfs');
                $results = $query->getResult();
                foreach ($results as $row)
                {
                    echo '<li><a href="dwarfs/'.$row->id.'">Dwarf '.$row->id.'</a></li>';
                    echo $row->name, ', ', $row->role;
                }
                ?>
            </ol>
            <li><a href="dwarfs">Flags</a></li>
            <ol>
                <?php
                $db = \Config\Database::connect();
                // validation starts here
                $validation =  \Config\Services::validation();
                $query = $db->query('SELECT * FROM flags');
                $results = $query->getResult();
                foreach ($results as $row)
                {
                    echo '<li><a href="flags/'.$row->id.'">Flag '.$row->id.'</a></li>';
                    echo $row->meaning;
                }
                ?>
            </ol>
        </div>

	</body>
</html>
