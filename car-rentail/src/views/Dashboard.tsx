import Sidebar from "../components/Sidebar";
import Topbar from "../components/Topbar";

export default function Dashboard() {
    return (<>
    <div className="d-flex vh-100 overflow-hidden">
        {/*  Sidebar Navigation  */}
       <Sidebar/>

        {/*  Main Content Area  */}
        <div className="flex-grow-1 d-flex flex-column overflow-hidden h-100">
            {/*  Topbar  */}
            <Topbar/>

            {/*  Content Split  */}
            <div className="d-flex flex-grow-1 overflow-hidden">
                {/*  Filters Panel  */}
                <div className="filters-panel p-4 h-100 flex-shrink-0">
                    <div className="d-flex justify-content-between align-items-center mb-4">
                        <h6 className="fw-bold mb-0">Filter by</h6>
                        <a href="#" className="text-muted text-decoration-none fs-xs fw-medium">Reset all <i
                                className="fa-solid fa-xmark ms-1"></i></a>
                    </div>

                    {/*  RENTAL TYPE  */}
                    <div className="mb-4">
                        <label className="text-muted fs-xs fw-bold mb-3 d-block">RENTAL TYPE</label>
                        <div className="d-flex gap-2">
                            <button
                                className="btn btn-outline-secondary btn-sm rounded-pill px-3 fw-medium text-dark border-secondary">Any</button>
                            <button
                                className="btn btn-outline-secondary btn-sm rounded-pill px-3 border-light-subtle text-muted fw-medium">Per
                                day</button>
                            <button className="btn btn-outline-dark btn-sm rounded-pill px-3 fw-medium">Per hour</button>
                        </div>
                    </div>

                    {/*  AVAILABLE NOW ONLY  */}
                    <div className="mb-4 d-flex justify-content-between align-items-center">
                        <label className="text-muted fs-xs fw-bold mb-0">AVAILABLE NOW ONLY</label>
                        <div className="form-check form-switch fs-5 mb-0 custom-switch">
                            <input className="form-check-input" type="checkbox" role="switch" checked />
                        </div>
                    </div>

                    {/*  PRICE RANGE  */}
                    <div className="mb-4">
                        <div className="d-flex justify-content-between align-items-center mb-2">
                            <label className="text-muted fs-xs fw-bold mb-0">PRICE RANGE / HOUR</label>
                            <i className="fa-solid fa-chevron-up text-muted fs-xs cursor-pointer"></i>
                        </div>
                        <div className="price-chart mb-3 d-flex align-items-end justify-content-between px-1"
                            style={{height: '50px'}}>
                            <div className="bar" style={{height: '20%'}}></div>
                            <div className="bar" style={{height: '30%'}}></div>
                            <div className="bar" style={{height: '40%'}}></div>
                            <div className="bar" style={{height: '50%'}}></div>
                            <div className="bar active" style={{height: '60%'}}></div>
                            <div className="bar active" style={{height: '80%'}}></div>
                            <div className="bar active" style={{height: '100%'}}></div>
                            <div className="bar active" style={{height: '90%'}}></div>
                            <div className="bar active" style={{height: '70%'}}></div>
                            <div className="bar active" style={{height: '50%'}}></div>
                            <div className="bar active" style={{height: '40%'}}></div>
                            <div className="bar active" style={{height: '30%'}}></div>
                            <div className="bar active" style={{height: '20%'}}></div>
                            <div className="bar" style={{height: '25%'}}></div>
                            <div className="bar" style={{height: '35%'}}></div>
                            <div className="bar" style={{height: '45%'}}></div>
                        </div>

                        {/*  Range slider UI visual placeholder  */}
                        <div className="position-relative mb-3">
                            <div style={{height: '2px', background: '#eee', width: '100%'}}></div>
                            <div
                                style={{height: '2px', background: '#000', width: '50%', position: 'absolute', top: '0', left: '25%'}}>
                            </div>
                            <div className="slider-thumb" style={{left: '25%'}}></div>
                            <div className="slider-thumb" style={{left: '75%'}}></div>
                        </div>

                        <div className="d-flex gap-2">
                            <div className="bg-light p-2 rounded-3 w-50">
                                <div className="text-muted" style={{fontSize: '10px', fontWeight: '600'}}>FROM</div>
                                <div className="fw-bold fs-sm">$19.00</div>
                            </div>
                            <div className="bg-light p-2 rounded-3 w-50">
                                <div className="text-muted" style={{fontSize: '10px', fontWeight: '600'}}>TO</div>
                                <div className="fw-bold fs-sm">$98.50</div>
                            </div>
                        </div>
                    </div>

                    <hr className="text-black-50 my-4 opacity-10" />

                    {/*  CAR BRAND  */}
                    <div className="mb-4 d-flex justify-content-between align-items-center cursor-pointer">
                        <label className="text-muted fs-xs fw-bold mb-0 cursor-pointer">CAR BRAND</label>
                        <i className="fa-solid fa-chevron-down text-muted fs-xs"></i>
                    </div>

                    <hr className="text-black-50 my-4 opacity-10" />

                    {/*  CAR MODEL & YEAR  */}
                    <div className="mb-4 d-flex justify-content-between align-items-center cursor-pointer">
                        <label className="text-muted fs-xs fw-bold mb-0 cursor-pointer">CAR MODEL & YEAR</label>
                        <i className="fa-solid fa-chevron-down text-muted fs-xs"></i>
                    </div>

                    <hr className="text-black-50 my-4 opacity-10" />

                    {/*  BODY TYPE  */}
                    <div className="mb-4">
                        <div className="d-flex justify-content-between align-items-center mb-3 cursor-pointer">
                            <label className="text-muted fs-xs fw-bold mb-0 cursor-pointer">BODY TYPE</label>
                            <i className="fa-solid fa-chevron-up text-muted fs-xs"></i>
                        </div>
                        <div className="checkbox-grid">
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="sedan" />
                                <label className="form-check-label fs-sm" htmlFor="sedan">Sedan</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="wagon" />
                                <label className="form-check-label fs-sm" htmlFor="wagon">Wagon</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="coupe" />
                                <label className="form-check-label fs-sm" htmlFor="coupe">Coupe</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="hatchback" />
                                <label className="form-check-label fs-sm" htmlFor="hatchback">Hatchback</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="pickup" />
                                <label className="form-check-label fs-sm" htmlFor="pickup">Pickup</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="sport" />
                                <label className="form-check-label fs-sm" htmlFor="sport">Sport coupe</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="crossover" />
                                <label className="form-check-label fs-sm" htmlFor="crossover">Crossover</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="van" />
                                <label className="form-check-label fs-sm" htmlFor="van">Van</label>
                            </div>
                        </div>
                    </div>

                    <hr className="text-black-50 my-4 opacity-10" />

                    {/*  TRANSMISSION  */}
                    <div className="mb-4">
                        <div className="d-flex justify-content-between align-items-center mb-3 cursor-pointer">
                            <label className="text-muted fs-xs fw-bold mb-0 cursor-pointer">TRANSMISSION</label>
                            <i className="fa-solid fa-chevron-up text-muted fs-xs"></i>
                        </div>
                        <div className="d-flex gap-2">
                            <button
                                className="btn btn-outline-dark btn-sm rounded-pill px-3 fw-medium bg-white">Any</button>
                            <button
                                className="btn btn-outline-secondary btn-sm rounded-pill px-3 border-light-subtle text-muted fw-medium">Automatic</button>
                            <button
                                className="btn btn-outline-secondary btn-sm rounded-pill px-3 border-light-subtle text-muted fw-medium">Manual</button>
                        </div>
                    </div>

                    <hr className="text-black-50 my-4 opacity-10" />

                    {/*  FUEL TYPE  */}
                    <div className="mb-4">
                        <div className="d-flex justify-content-between align-items-center mb-3 cursor-pointer">
                            <label className="text-muted fs-xs fw-bold mb-0 cursor-pointer">FUEL TYPE</label>
                            <i className="fa-solid fa-chevron-up text-muted fs-xs"></i>
                        </div>
                        <div className="checkbox-grid">
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="gas" />
                                <label className="form-check-label fs-sm" htmlFor="gas">Gasoline</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="flex" />
                                <label className="form-check-label fs-sm" htmlFor="flex">Flex Fuel (E85)</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="diesel" />
                                <label className="form-check-label fs-sm" htmlFor="diesel">Diesel</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="hybrid" />
                                <label className="form-check-label fs-sm" htmlFor="hybrid">Hybrid</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" checked id="electric" />
                                <label className="form-check-label fs-sm" htmlFor="electric">Electric</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="hydrogen" />
                                <label className="form-check-label fs-sm" htmlFor="hydrogen">Hydrogen</label>
                            </div>
                            <div className="form-check custom-checkbox">
                                <input className="form-check-input" type="checkbox" id="other" />
                                <label className="form-check-label fs-sm" htmlFor="other">Other</label>
                            </div>
                        </div>
                    </div>
                </div>

                {/*  Vehicles List Panel  */}
                <div className="vehicles-panel p-4 h-100 flex-shrink-0 position-relative">
                    <div className="d-flex justify-content-between align-items-center mb-4 sticky-top bg-light"
                        style={{top: '-1.5rem', paddingTop: '1.5rem', marginTop: '-1.5rem', zIndex: '10'}}>
                        <h4 className="fw-bold mb-0">48 vehicles to rent</h4>
                        <div className="d-flex align-items-center gap-4 text-muted fs-sm">
                            <div className="fw-medium text-dark cursor-pointer d-flex align-items-center gap-2">
                                Closest to me <i className="fa-solid fa-chevron-down"></i>
                            </div>
                            <div className="cursor-pointer d-flex align-items-center gap-2">
                                Hide map <i className="fa-regular fa-map"></i>
                            </div>
                        </div>
                    </div>

                    {/*  CAR 1  */}
                    <div className="car-card">
                        <div className="d-flex justify-content-between align-items-center mb-3">
                            <div className="d-flex align-items-center gap-3 fs-sm fw-medium">
                                <div className="text-dark"><i className="fa-solid fa-person-walking text-muted me-2"></i>120m
                                    <span className="text-muted fw-normal">(4 min)</span>
                                </div>
                                <div className="text-warning"><i className="fa-solid fa-star"></i> <span className="text-dark">4.7
                                        <span className="text-muted fw-normal">(109)</span></span></div>
                            </div>
                            <i className="fa-regular fa-heart text-muted fs-5 cursor-pointer hover-danger"></i>
                        </div>
                        <img src="https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?auto=format&fit=crop&q=80&w=800"
                            className="car-img" alt="Audi A4" />
                        <div className="d-flex justify-content-between align-items-end mt-3">
                            <div>
                                <h5 className="fw-bold mb-1">Audi A4</h5>
                                <div className="text-muted fs-sm">2.0 TFSI Sport (249 hp, Quattro)</div>
                            </div>
                            <div className="text-end">
                                <span className="fs-5 fw-bold">$24.59</span><span className="text-muted fs-sm"> / hour</span>
                            </div>
                        </div>
                    </div>

                    {/*  CAR 2  */}
                    <div className="car-card">
                        <div className="d-flex justify-content-between align-items-center mb-3">
                            <div className="d-flex align-items-center gap-3 fs-sm fw-medium">
                                <div className="text-dark"><i className="fa-solid fa-person-walking text-muted me-2"></i>250m
                                    <span className="text-muted fw-normal">(8 min)</span>
                                </div>
                                <div className="text-warning"><i className="fa-solid fa-star"></i> <span className="text-dark">4.0
                                        <span className="text-muted fw-normal">(87)</span></span></div>
                            </div>
                            <i className="fa-regular fa-heart text-muted fs-5 cursor-pointer hover-danger"></i>
                        </div>
                        <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&q=80&w=800"
                            className="car-img" alt="Opel Insignia" />
                        <div className="d-flex justify-content-between align-items-end mt-3">
                            <div>
                                <h5 className="fw-bold mb-1">Opel Insignia</h5>
                                <div className="text-muted fs-sm">2.0 Turbo Grand Sport (230 hp, AWD)</div>
                            </div>
                            <div className="text-end">
                                <span className="fs-5 fw-bold">$19.99</span><span className="text-muted fs-sm"> / hour</span>
                            </div>
                        </div>
                    </div>

                    {/*  CAR 3  */}
                    <div className="car-card">
                        <div className="d-flex justify-content-between align-items-center mb-3">
                            <div className="d-flex align-items-center gap-3 fs-sm fw-medium">
                                <div className="text-dark"><i className="fa-solid fa-person-walking text-muted me-2"></i>90m
                                    <span className="text-muted fw-normal">(3 min)</span>
                                </div>
                                <div className="text-warning"><i className="fa-solid fa-star"></i> <span className="text-dark">5.0
                                        <span className="text-muted fw-normal">(766)</span></span></div>
                            </div>
                            <i className="fa-solid fa-heart text-danger fs-5 cursor-pointer"></i>
                        </div>
                        <img src="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?auto=format&fit=crop&q=80&w=800"
                            className="car-img" alt="Mazda 6" />
                        <div className="d-flex justify-content-between align-items-end mt-3">
                            <div>
                                <h5 className="fw-bold mb-1">Mazda 6</h5>
                                <div className="text-muted fs-sm">2.5 Turbo Premium (250 hp, AWD)</div>
                            </div>
                            <div className="text-end">
                                <span className="fs-5 fw-bold">$22.99</span><span className="text-muted fs-sm"> / hour</span>
                            </div>
                        </div>
                    </div>
                </div>

                {/*  Map Panel  */}
                <div className="map-panel h-100 flex-grow-1 position-relative">
                    <div className="map-bg"></div>

                    {/*  Search Bar  */}
                    <div
                        className="search-bar-map d-flex align-items-center bg-white shadow-sm rounded-pill px-4 py-3 mt-4 mx-auto position-relative z-1">
                        <i className="fa-solid fa-search text-muted fs-5"></i>
                        <input type="text" placeholder="Search address or vehicles..."
                            className="ms-3 border-0 bg-transparent w-100 fs-sm" style={{outline: 'none'}} />
                    </div>

                    {/*  Right floating controls  */}
                    <div className="position-absolute d-flex flex-column gap-2 z-1" style={{top: '1.5rem', right: '1.5rem'}}>
                        <button
                            className="btn btn-white bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center"
                            style={{width: '40px', height: '40px'}}><i className="fa-solid fa-expand text-dark"></i></button>
                    </div>

                    <div className="position-absolute d-flex flex-column bg-white shadow-sm rounded-3 overflow-hidden z-1"
                        style={{bottom: '2rem', right: '1.5rem'}}>
                        <button className="btn btn-white px-3 py-2 border-bottom border-light"><i
                                className="fa-solid fa-plus text-dark"></i></button>
                        <button className="btn btn-white px-3 py-2"><i className="fa-solid fa-minus text-dark"></i></button>
                    </div>

                    <div className="position-absolute d-flex flex-column z-1" style={{bottom: '2rem', right: '5rem'}}>
                        <button
                            className="btn btn-dark rounded-circle d-flex align-items-center justify-content-center shadow"
                            style={{width: '40px', height: '40px'}}><i
                                className="fa-solid fa-location-crosshairs text-white"></i></button>
                    </div>

                    {/*  Mock map elements (route and pins)  */}
                    <svg className="position-absolute w-100 h-100 top-0 start-0 pointer-events-none z-0">
                        {/*  Simulated Route Line  */}
                        <path d="M 280 480 L 320 450 L 370 460 L 450 380 L 520 390 L 580 250 L 680 280 L 720 220"
                            stroke="#1a1a1a" strokeWidth="4" fill="none" strokeLinejoin="round"
                            strokeLinecap="round" />
                    </svg>

                    {/*  Route start and end markers  */}
                    <div className="position-absolute bg-success rounded-circle border border-white border-2 z-1 shadow"
                        style={{width: '14px', height: '14px', top: '473px', left: '273px'}}></div>
                    <div className="position-absolute bg-dark rounded-circle border border-white border-2 z-1 shadow"
                        style={{width: '18px', height: '18px', top: '211px', left: '711px'}}></div>

                    {/*  Time indicator on route  */}
                    <div className="position-absolute bg-white px-2 py-1 rounded-pill shadow-sm text-dark fs-xs fw-bold z-1 d-flex align-items-center gap-1 border"
                        style={{top: '360px', right: '10%'}}>
                        <i className="fa-solid fa-person-walking text-muted"></i> 15 min
                    </div>

                    {/*  Numbered dark pins  */}
                    <div className="map-pin-dark" style={{top: '25%', left: '20%'}}>2</div>
                    <div className="map-pin-dark" style={{top: '75%', left: '35%'}}>3</div>
                    <div className="map-pin-dark" style={{bottom: '10%', right: '20%'}}>5</div>
                    <div className="map-pin-dark" style={{top: '20%', right: '10%'}}>6</div>

                    {/*  Car icons on map  */}
                    <div className="position-absolute" style={{top: '520px', left: '280px', transform: 'rotate(15deg)'}}>
                        <div className="bg-success rounded-pill border border-2 border-white"
                            style={{width: '16px', height: '32px', boxShadow: '0 2px 4px rgba(0,0,0,0.3)'}}></div>
                    </div>
                    <div className="position-absolute" style={{top: '600px', left: '600px', transform: 'rotate(45deg)'}}>
                        <div className="bg-dark rounded-pill border border-2 border-white"
                            style={{width: '16px', height: '32px', boxShadow: '0 2px 4px rgba(0,0,0,0.3)'}}></div>
                    </div>
                    <div className="position-absolute" style={{top: '850px', left: '350px', transform: 'rotate(-20deg)'}}>
                        <div className="bg-danger rounded-pill border border-2 border-white"
                            style={{width: '16px', height: '32px', boxShadow: '0 2px 4px rgba(0,0,0,0.3)'}}></div>
                    </div>
                    <div className="position-absolute" style={{top: '550px', left: '850px', transform: 'rotate(30deg)'}}>
                        <div className="bg-primary rounded-pill border border-2 border-white"
                            style={{width: '16px', height: '32px', boxShadow: '0 2px 4px rgba(0,0,0,0.3)'}}></div>
                    </div>

                    {/*  Active Car Popup (VW Golf GTI)  */}
                    <div className="position-absolute z-2" style={{top: '150px', right: '5rem'}}>
                        <div className="bg-white rounded-4 shadow-lg p-3" style={{width: '260px', position: 'relative'}}>
                            <div className="d-flex justify-content-between align-items-center mb-2">
                                <div className="text-warning fs-sm fw-bold"><i className="fa-solid fa-star"></i> <span
                                        className="text-dark">4.9 <span className="text-muted fw-normal">(189)</span></span>
                                </div>
                                <div className="bg-light rounded-circle d-flex align-items-center justify-content-center cursor-pointer"
                                    style={{width: '28px', height: '28px'}}>
                                    <i className="fa-regular fa-heart text-muted fs-sm"></i>
                                </div>
                            </div>
                            <img src="https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?auto=format&fit=crop&q=80&w=400"
                                className="w-100 rounded mb-2" style={{height: '120px', objectFit: 'cover'}} alt="VW Golf GTI" />
                            <div className="fs-sm fw-bold mb-1">VW Golf GTI</div>
                            <div className="text-muted mb-3" style={{fontSize: '11px'}}>2.0 TSI Autobahn (241 hp, FWD)</div>
                            <button
                                className="btn btn-dark w-100 btn-sm d-flex justify-content-between align-items-center px-3 py-2 rounded-3">
                                <span className="fw-medium">Book</span>
                                <span className="fw-bold">$20/h</span>
                            </button>

                            {/*  Arrow pointing to marker  */}
                            <div className="position-absolute"
                                style={{bottom: '-8px', left: '50%', transform: 'translateX(-50%)', borderWidth: '10px 10px 0', borderStyle: 'solid', borderColor: 'white transparent transparent transparent', filter: 'drop-shadow(0px 2px 2px rgba(0,0,0,0.1))'}}>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </>)
}