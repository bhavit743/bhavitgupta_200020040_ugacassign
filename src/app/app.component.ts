import { Component, EventEmitter, HostBinding, Output } from '@angular/core';
import { MatSlideToggleChange } from '@angular/material/slide-toggle';

export interface PeriodicElement {
  name: string;
  rollnumber: number;
  branch: string;
}

const ELEMENT_DATA: PeriodicElement[] = [
  {rollnumber: 200010001, name: 'Student-1', branch: 'Civil Engineering'},
  {rollnumber: 200020002, name: 'Student-2', branch: 'Chemical Engineering'},
  {rollnumber: 200030003, name: 'Student-3', branch: 'CSE'},
  {rollnumber: 200040004, name: 'Student-4', branch: 'Electrical Engineering'},
  {rollnumber: 200050005, name: 'Student-5', branch: 'Mechanical Engineering'},
  {rollnumber: 200060006, name: 'Student-6', branch: 'MEMS'},
  {rollnumber: 200070007, name: 'Student-7', branch: 'Aerospace Engineering'},
  {rollnumber: 200080008, name: 'Student-8', branch: 'Economics'},
  {rollnumber: 200090009, name: 'Student-9', branch: 'Maths Engineering'},
  {rollnumber: 200010010, name: 'Student-10', branch: 'Civil Engineering'},
  {rollnumber: 200020011, name: 'Student-11', branch: 'Chemical Engineering'},
  {rollnumber: 200030012, name: 'Student-12', branch: 'CSE'}
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
