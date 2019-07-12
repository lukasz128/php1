			<section class="sections">
				
				<h2 class="title"> Funkcje Agregujace </h2>

				<div>
					<h3 class="second-title"> Cena produktów w danej kategorii </h3>

					<div class="scroll-table">
						<table class="main-table">
							<tr>
								<th> kategoria </th>
								<th> cena produktów </th>
							</tr>
							<?php while($row = $querySelectAgr1->fetch_assoc()) { ?>
							<tr>
								<td><?=$row['kategoria']?></td>
								<td><?=round($row['cena produktów'], 2)?>zł</td>
							</tr>
							<?php } ?>
						</table>
					</div>

					<div class="duration"><?=$durationAgr1?> </div>
				</div>

				<div>
					<h3 class="second-title"> Minimalna cena produktów  </h3>

					<div class="scroll-table">
						<table class="main-table">
							<tr>
								<th> kategoria </th>
								<th> najtańszy produkt</th>
							</tr>
							<?php while($row = $querySelectAgr4->fetch_assoc()) { ?>
							<tr>
								<td><?=$row['kategoria']?></td>
								<td><?=round($row['najtańszy produkt'], 2)?>zł</td>
							</tr>
							<?php } ?>
						</table>
					</div>

					<div class="duration"><?=$durationAgr4?></div>
				</div>

				<div>
					<h3 class="second-title"> Średnia cena produktów  </h3>

					<div class="scroll-table">
						<table class="main-table">
							<tr>
								<th> kategoria </th>
								<th> średnia cena produktów</th>
							</tr>
							<?php while($row = $querySelectAgr5->fetch_assoc()) { ?>
							<tr>
								<td><?=$row['kategoria']?></td>
								<td><?=round($row['średnia cena produktów'], 2)?>zł</td>
							</tr>
							<?php } ?>
						</table>
					</div>

					<div class="duration"><?=$durationAgr5?></div>
				</div>

				<div>
					<h3 class="second-title"> Liczba produktów w danej ocenie </h3>

					<div class="scroll-table">
						<table class="main-table">
							<tr>
								<th> ocena </th>
								<th> liczba produktów</th>
							</tr>
							<?php while($row = $querySelectAgr2->fetch_assoc()) { ?>
							<tr>
								<td><?=$row['ocena']?></td>
								<td><?=$row['liczba produktów w danej ocenie']?></td>
							</tr>
							<?php } ?>
						</table>
					</div>

					<div class="duration"><?=$durationAgr2?> </div>
				</div>

				<div>
					<h3 class="second-title"> Liczba produktów w danej kategorii </h3>

					<div class="scroll-table">
						<table class="main-table">
							<tr>
								<th> kategoria </th>
								<th> liczba produktów</th>
							</tr>
							<?php while($row = $querySelectAgr3->fetch_assoc()) { ?>
							<tr>
								<td><?=$row['kategoria']?></td>
								<td><?=$row['liczba produktów']?></td>
							</tr>
							<?php } ?>
						</table>
					</div>

					<div class="duration"><?=$durationAgr3?></div>
				</div>

			</section>



