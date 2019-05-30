<?php include '_inc/init.html' ?>

	<main>
		<div class="container">
			<h1>Tutorial - Table</h1>
			<p> https://codepen.io - online HTML CSS JS tester </p>

			<table>
				<tr>
					<th>1.</th>
					<th>2.</th>
					<th>3.</th>
					<th>4.</th>
					<th>5.</th>
					<th>6.</th>
				</tr>
				<tr>
					<td>Jedna</td>
					<td>Dva</td>
					<td>Tri</td>
					<td>Styri</td>
					<td>Pat</td>
					<td>10,-</td>
				</tr>
				<tr>
					<td>2.Jedna</td>
					<td>2.Dva</td>
					<td>2.Tri</td>
					<td colspan="2">2.Styri</td>
					<td>10,-</td>
				</tr>
				<tr>
					<td rowspan="2">3.Jedna</td>
					<td>3.Dva</td>
					<td>3.Tri</td>
					<td>3.Styri</td>
					<td>3.Pat</td>
					<td>10,-</td>
				</tr>
						<tr>
					<td>4.Jedna</td>
					<td>4.Dva</td>
					<td>4.Tri</td>
					<td>4.Styri</td>
					<td>10,-</td>
				</tr>
				<tr>
					<td colspan="6">5.Jedna</td>
				</tr>
			</table>

			<ul>
				<li>table - tabulka</li>
				<li>tr - Element Table Row - riadok v tabulke</li>
				<li>td - Element Table Data - data</li>
				<li>th - Element Tabble Header - Nadpisy v tabulke</li>
				<li>---</li>
				<li>rowspan="X" - Atribut - Spaja X buniek naprieč riadkami </li>
				<li>colspan="X" - Atribut - Spaja X buniek naprieč stlpcami </li>
				<li>---</li>
				<li>thead - Obalovaci Element - Presnejsie a Sematickesie</li>
				<li>tbody - Obalovaci Element - Presnejsie a Sematickesie</li>
				<li>tfoot - Obalovaci Element - Presnejsie a Sematickesie</li>
			</ul>
			
			<table>
				<thead>
					<tr>
						<th>1.</th>
						<th>2.</th>
						<th>3.</th>
						<th>4.</th>
						<th>5.</th>
						<th>6.</th>
					</tr>
				</thead>
					<tbody>
					<tr>
						<td>Jedna</td>
						<td>Dva</td>
						<td>Tri</td>
						<td>Styri</td>
						<td>Pat</td>
						<td>10,-</td>
					</tr>
					<tr>
						<td>2.Jedna</td>
						<td>2.Dva</td>
						<td>2.Tri</td>
						<td colspan="2">2.Styri</td>
						<td>10,-</td>
					</tr>
					<tr>
						<td rowspan="2">3.Jedna</td>
						<td>3.Dva</td>
						<td>3.Tri</td>
						<td>3.Styri</td>
						<td>3.Pat</td>
						<td>10,-</td>
					</tr>
							<tr>
						<td>4.Jedna</td>
						<td>4.Dva</td>
						<td>4.Tri</td>
						<td>4.Styri</td>
						<td>10,-</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="6">5.Jedna</td>
					</tr>
				</tfoot>
			</table>

        
		</div>
	</main>

<?php include '_inc/footer.html' ?>