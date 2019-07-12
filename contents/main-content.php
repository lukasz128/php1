			<section class="sections">
				<h2 class="title"> Wszystkie dane </h2>

				<div class="scroll-table">
					<table class="main-table">
						<tr>
							<th> id produkt </th>
							<th> cena brutto </th>
							<th> podatek </th>
							<th> cena netto </th>
							<th> ilosc </th>
							<th> kategoria </th>
							<th> nazwa </th>
							<th> ocena </th>
							<th> opis </th>
						</tr>
						<?php while($row = $querySelect->fetch_assoc()) { ?>
						<tr>
							<td><?=$row['id_produkt']?></td>
							<td><?=$row['cena_brutto']?>zł</td>
							<td><?=$row['podatek']?>%</td>
							<td><?=$row['cena_netto']?>zł</td>
							<td><?=$row['ilosc']?></td>
							<td><?=$row['kategoria']?></td>
							<td><?=$row['nazwa']?></td>
							<td><?=$row['ocena']?>/10</td>
							<td><?=$row['opis']?></td>
						</tr>
						<?php }?>
					</table>
				</div>
			</section>

			<div class="duration"><?=$durationSelect?></div>