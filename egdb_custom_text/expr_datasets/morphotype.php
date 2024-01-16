<p>
  RNA-seq of <i>Aethionema arabicum</i> diaspores imbibed at a range of temperatures. 
</p>

<img class='rounded' src='<?php echo "$images_path/morphotype_desc.png";?>' style="max-width:900px">

<p>
Diaspores included the natural M+ seed and IND fruit diaspores and bare M- seed (artificially created through pericarp removal) (A). M+ seed and IND fruit diaspores have contrasting germination at different temperatures with IND fruit germination restricted to lower temperatures than M+ seed diaspores. Pericarp removal (M-) permits germination at higher temperatures. Increased temperature during reproductive growth of the parent plant also influences germination temperature response, allowing for higher percentage of germination on IND fruits. Seeds and fruits were sampled dry and during imbibition at timepoints allowing comparison of physiological germination stage (time of 1% germination, T1%) and physical timepoints (e.g. 24 hours) (C). 3 replicates of each treatment were performed.
</p>

<p>
  Experimental naming scheme for Aethionema arabicum RNAseq and hormone samples. The names encode the following information as: [Genotype][Maternal temperature][Morph][Imbibition temperature][Imbibition duration]-[Replicate number]
</p>

  <table class="table" style="max-width:900px">

<tr><th>Argument</th><th>Options</th><th>Description</th></tr>
<tr><td>[Genotype]</td><td>T</td><td>TUR (Turkey)</td></tr>
<tr><td>[Maternal temperature]</td><td>20, 25</td><td>Plants grown at 20ºC or 25ºC</td></tr>
<tr><td>[Morph]</td><td>p, m, i</td><td>M+ seeds, M- seeds, IND fruits</td></tr>
<tr><td>[Imbibition temperature]</td><td>xT, DRY</td><td>x = Integer, dry seeds</td></tr>
<tr><td>[Imbibition time]</td><td>yh</td><td>y = Integer, blank for dry seeds</td></tr>
<tr><td>[Replicate number]</td><td>1,2,3,4</td><td>biological replicate</td></tr>
  </table>



<p>For example, 'T20p9C24h-1' refers to M+ seeds from TUR ecotype plants grown at 20ºC, imbibed at 9ºC for 24 hours, replicate number 1. 'T25mDRY-2' would refer M- seeds from TUR plants grown at 25ºC, and dry, no imbibition temperature or time.
</p>

<!-- <img class='rounded' src='<?php //echo "$images_path/expr/nm_seed_fruit.png";?>' width="200px" alt='non mucilaginous dry seeds'>
<img class='rounded' src='<?php //echo "$images_path/expr/m_seed_fruit.png";?>' width="200px" alt='mucilaginous dry seeds'>
<p>
  Open indehiscent fruit of <i>Ae. arabicum</i> with a Non mucilaginous seed (left). Open dehiscent fruit with dry mucilaginous seeds (right).
</p>
<p>
  <i>Aethionema arabicum</i> accession 0000309 (collected from Turkey and obtained from Kew’s Millennium Seed Bank, UK) and ES1020 (collected from Turkey and obtained from Eric Schranz, Wageningen) plants were grown on soil under long-day conditions (16 h light/20°C and 8 h dark/18°C). Freshly matured seeds from dehiscent (harboring M+ seeds) and indehiscent (harboring NM seeds) fruits derived from several plants were harvested. Two replicates of 20 mg fresh dry M+ and NM seeds, resulting in four samples in total, were sequenced using a HiSeq-2000 sequencer (Illumina) generating 100 bp single-end reads, which were processed, analyzed and normalized to RPKM.
</p>
 -->

<p>
  Raw data can be found in the BioProject <a href="https://www.ncbi.nlm.nih.gov/sra/PRJNA639669" target="_blank">PRJNA639669</a> and <a href="https://www.ncbi.nlm.nih.gov/sra/PRJNA611900" target="_blank">PRJNA611900</a>.
</p>
