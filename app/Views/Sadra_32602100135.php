<?= $this->extend('layout/32602100135_Sadra') ?>
<?= $this->section('content') ?>
<div class="about">
  <div class="about-us">
    <h1>About Us</h1>
    <p>An undergraduate student at the
      Faculty of Industrial Technology,
      majoring in Informatics Engineering
      from the Islamic University of
      Sultan Agung Semarang</p>
  </div>
  <div class="about-experience">
    <h1>experience</h1>
    <div class="about-experience-list">
      <table border='1'>
        <tr>
          <th rowspan='3'>2020</th>
          <th colspan='2'>Direct of Photography</th>
          <th rowspan='3'>2021</th>
          <th colspan='2'>Processing Auido Video 2D & 3D</th>
        </tr>
        <tr>
          <td>Jakarta</td>
          <td>Indonesia</td>
          <td>Jakarta</td>
          <td>Indonesia</td>
        </tr>
        <tr>
          <td colspan='2'>Being Responsible for Placing
            an Angel in a Short Film</td>
          <td colspan='2'>Final Value Determinants that
            process an audio visual, 2D and 3D animation</td>
        </tr>
      </table>
    </div>
  </div>
</div>
<style>
  /* app/Views/layout/32602100135_Sadra.css */
  .about {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .about-us,
  .about-experience {
    padding: 20px;
    text-align: center;
  }

  .about-us h1,
  .about-experience h1 {
    color: #333;
  }

  .about-experience-list table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  .about-experience-list th,
  .about-experience-list td {
    padding: 10px;
    border: 1px solid #333;
  }

  .about-experience-list th {
    background-color: #f2f2f2;
    text-align: center;
  }

  .about-experience-list td {
    text-align: left;
    font-size: 14px;
  }

  @media (min-width: 600px) {

    /* Styles for larger screens */
    .about {
      flex-direction: row;
      justify-content: space-between;
      align-items: flex-start;
    }

    .about-us,
    .about-experience {
      flex: 1;
    }

    .about-experience-list td {
      font-size: 16px;
    }
  }
</style>
<?= $this->endSection() ?>