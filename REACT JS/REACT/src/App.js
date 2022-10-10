
import "./App.css";
import alchemist from './alchemist.jpg';
import fortis from './fortis.jpg';
import ivy from './ivy.jpg';
import max from './max.jpg';
import pgi from './pgi.jpg';

function App() {
  return (
    <div className="App">
      <div class="jumbotron">
        <h1 class="display-4" style={{textAlign: "center"}}>
          Nearby Hospitals
        </h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6" style={{marginBottom: "40px"}}>
            <div class="card" style={{width: "18rem"}}>
              <img
                class="card-img-top"
                src={alchemist}
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Alchemist Hospital</h5>
                <p class="card-text">
                  Address: Sector 21, Budanpur, Panchkula, Punjab 134112
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style={{marginBottom: "40px"}}>
            <div class="card" style={{width: "18rem"}}>
              <img class="card-img-top" src={max} alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Max Hospital</h5>
                <p class="card-text">
                  Address: Chandigarh Rd, near Civil Hospital, Phase 6, Sector
                  56, Sahibzada Ajit Singh Nagar, Punjab 160055
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style={{marginBottom: "40px"}}>
            <div class="card" style={{width: "18rem"}}>
              <img class="card-img-top" src={fortis} alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Fortis Hospital</h5>
                <p class="card-text">
                  Address: Sector 62, Sahibzada Ajit Singh Nagar, Punjab 160062
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6" style={{marginBottom: "40px"}}>
            <div class="card" style={{width: "18rem"}}>
              <img class="card-img-top" src={pgi} alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">PGIMER Chandigarh</h5>
                <p class="card-text">
                  Address: Madhya Marg, Sector 12, Chandigarh, 160012
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6" style={{marginBottom: "40px"}}>
            <div class="card text-center">
              <div class="card-block">
                <img src={ivy} alt="" class="img-fluid" />
                <div class="card-title">
                  <h4>Ivy Hospital</h4>
                </div>
                <div class="card-text">
                  Address: 3376, Lakhnaur Pind Road, Sector 71, Sahibzada Ajit
                  Singh Nagar, Punjab 160071
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;
