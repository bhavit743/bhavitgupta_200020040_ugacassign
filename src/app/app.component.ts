import { Component, EventEmitter, HostBinding, Output } from '@angular/core';
import { MatSlideToggleChange } from '@angular/material/slide-toggle';

export interface PeriodicElement {
  name: string;
  rollnumber: number;
  branch: string;
}

const ELEMENT_DATA: PeriodicElement[] = [
  {rollnumber: 200010001, name: 'Bhavit Gupta', branch: 'Civil Engineering'},
  {rollnumber: 200020002, name: 'Bhavit Gupta', branch: 'Chemical Engineering'},
  {rollnumber: 200030003, name: 'Bhavit Gupta', branch: 'CSE'},
  {rollnumber: 200040004, name: 'Bhavit Gupta', branch: 'Electrical Engineering'},
  {rollnumber: 200050005, name: 'Bhavit Gupta', branch: 'Mechanical Engineering'},
  {rollnumber: 200060006, name: 'Bhavit Gupta', branch: 'MEMS'},
  {rollnumber: 200070007, name: 'Bhavit Gupta', branch: 'Aerospace Engineering'},
  {rollnumber: 200080008, name: 'Bhavit Gupta', branch: 'Economics'},
  {rollnumber: 200090009, name: 'Bhavit Gupta', branch: 'Maths Engineering'},
  {rollnumber: 200010010, name: 'Bhavit Gupta', branch: 'Civil Engineering'},
  {rollnumber: 200020011, name: 'Bhavit Gupta', branch: 'Chemical Engineering'},
  {rollnumber: 200030012, name: 'Bhavit Gupta', branch: 'CSE'}
];

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'problemtwo';
  displayedColumns: string[] = ['rollnumber', 'name', 'branch'];
  dataSource = ELEMENT_DATA;
  isAlternatemode: boolean = false;

  themeChange(){
    this.isAlternatemode = !this.isAlternatemode;
  }
}
